<?php

/* 
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 *  */

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateEmployee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = [
            'title' => 'Employees',
            'employees' => Employee::orderBy('name', 'asc')
                                   ->paginate(10)
        ];
        
        return view('employees.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees/create', ['title' => 'Add an Employee']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateEmployee $request)
    {
        $validated = $request->validated();

        $employee = new Employee;

        $employee->name = $validated['name'];
        $employee->recruited_at = date('Y-m-d');
        $employee->born = $validated['born'];
        $employee->address = $validated['address'];
        $employee->email = $validated['email'];

        $employee->save();

        return redirect('/employee')->with('notif', $validated['name'] . ' was successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $datas = [
            'title' => 'Employee',
            'employee' => [
                'id' => $employee->id,
                'name' => $employee->name,
                'recruited_at' => $employee->recruited_at,
                'born' => $employee->born,
                'address' => $employee->address,
                'email' => $employee->email
            ]
        ];

        return view('employees.show', $datas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $datas = [
            'title' => 'Edit an Employee\'s Data',
            'employee' => [
                'id' => $employee->id,
                'name' => $employee->name,
                'born' => $employee->born,
                'address' => $employee->address,
                'email' => $employee->email,
            ]
        ];
        
        return view('employees.edit', $datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateEmployee $request, Employee $employee)
    {
        $validated = $request->validated();

        $employee->name = $validated['name'];
        $employee->recruited_at = date('Y-m-d');
        $employee->born = $validated['born'];
        $employee->address = $validated['address'];
        $employee->email = $validated['email'];

        $employee->save();

        return redirect('/employee/' . $employee->id)->with('notif', $validated['name'] . '\'s datas was successfully changed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);

        return redirect('/employee')->with('notif', $employee->name . ' was successfully deleted.');
    }
    
    /* 
     * Provide search view
     *  */
    public function search(Request $request)
    {
        $request->session()->put('keyword', $request->input('keyword', $request->session()->get('keyword')));
        
        $datas = [
            'title' => 'Employees',
            'employees' => Employee::where('name', 'like', "%{$request->session()->get('keyword')}%")
                                   ->orderBy('name', 'asc')
                                   ->paginate(10),
            'keyword' => $request->session()->get('keyword')
        ];

        return view('employees.index', $datas);
    }
}
