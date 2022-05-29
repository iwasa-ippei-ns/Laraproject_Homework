<?php

namespace App\Http\Controllers;

use App\Models\testMember;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = 'ヴァルー';
        $array = ['aaaaa','bbbbbb','cccccc'];
        return view('index', compact('value', 'array'));
    }

    public function practice()
    {
        return view('practice');
    }

    public function main(Request $request)
    {
        $testMember = new testMember;
        $returnView;

        if($request->axreq == 'All') {
            $returnView = $this->getAllData($testMember);
        } elseif($request->axreq == 'Single') {
            $returnView = $this->find($request, $testMember);
        } elseif($request->axreq == 'Update') {
            $returnView = $this->update($request, $testMember);
        } elseif($request->axreq == 'AddSingle') {
            $returnView = $this->insert($request, $testMember);
        }

        return $returnView;
    }

    public function find(Request $request, testMember $testMember)
    {
        
        $value = $testMember->with('department')->find($request->id);
        return view('member_Single', compact('value'));
    }

    public function getAllData(testMember $testMember)
    {
        $value = $testMember->with('department')->get();
        return view('member_All', compact('value'));
    }

    public function update(Request $request, testMember $testMember)
    {
        $befoValue = $value = $testMember->find($request->id);
        $testMember->where('id', '=', $request->id)->update([
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age
        ]);
        $afterValue = $value = $testMember->find($request->id);

        return view('member_Update', compact('befoValue', 'afterValue'));
    }

    public function insert(Request $request, testMember $testMember)
    {
        $intDepartmentId = (int)$request->department_id;
        $testMember->insert([
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
            'department_id' => $request->department_id
        ]);
        $value = $testMember->with('department')->get();

        return view('member_AddSingle', compact('value'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testMember  $testMember
     * @return \Illuminate\Http\Response
     */
    public function show(testMember $testMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testMember  $testMember
     * @return \Illuminate\Http\Response
     */
    public function edit(testMember $testMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testMember  $testMember
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testMember  $testMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(testMember $testMember)
    {
        //
    }
}
