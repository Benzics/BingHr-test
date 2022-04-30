<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve all users in table
        $users = Member::all();
        $user_data = [];

        foreach ($users as $row)
        {
            switch ($row->role)
            {
                case 0:
                    $role_name = 'Employee';
                    break;
                case 1:
                    $role_name = 'Admin';
                    break;
                case 2:
                    $role_name = 'HR Admin';
                    break;
                case 3:
                    $role_name = 'Super Admin';
                    break;
                default:
                    $role_name = 'Employee';
            }

            $plain_date = date('d M, Y', strtotime($row->created_at));


            $user_data[] = (object) [
                'user_name' => $row->user_name,
                'password' => $row->password,
                'first_name' => $row->first_name,
                'last_name' => $row->last_name,
                'email' => $row->email,
                'id' => $row->id,
                'role' => $row->role,
                'phone' => $row->phone,
                'created_at' => $plain_date,
                'role_name' => $role_name
            ];
        }


        $data['users'] = $user_data;

        return view('dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|numeric|unique:members',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required|numeric',
            'username' => 'required'

        ]);

        // add user to db
        $member = Member::create([
            'id' => $validated['id'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'phone' => $request->phone,
            'user_name' => $validated['username']

        ]);

        if ($member)
        {

            return redirect('/members')->with('success', 'New user successfully added');
        }

        return redirect('/members')->with('error', 'An error occured, please try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required|numeric',
            'username' => 'required'

        ]);

        $member = Member::find($id);

        $member->first_name = $validated['first_name'];
        $member->last_name = $validated['last_name'];
        $member->email = $validated['email'];
        $member->password = Hash::make($validated['password']);
        $member->role = $validated['role'];
        $member->user_name = $validated['username'];
        $member->phone = $request->phone;


        if ($member->save())
        {

            return redirect('/members')->with('success', 'User data edited successfully.');
        }

        return redirect('/members')->with('error', 'An error occured, please try again.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);

        if ($member->delete())
        {

            return redirect('/members')->with('success', 'User deleted successfully.');
        }

        return redirect('/members')->with('error', 'An error occured, please try again.');
    }
}
