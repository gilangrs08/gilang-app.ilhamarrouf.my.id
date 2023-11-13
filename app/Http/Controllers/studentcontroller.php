<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    
    public function index()
    {
        //dd(Student::query()->get())
        return view('student.index', [
            'students'=> Student::query()->get(),
        ]);
    }

    public function create()
    {
        return view('student.create');
    }  
    
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => ['required', 'min:3'],
        'address' => ['required', 'min:3'],
        'phone_number' => ['required', 'numeric'],
        'class' => ['required'],
      ]);
        student::create([
         'name' => $request->name,
         'address' => $request->address,
         'phone_number' => $request->phone_number,
         'class' => $request->class,
        ]);
        $student = new student();
      
        
        $student->name = $request->get('name');
        $student->address = $request->get('address');
        $student->phone_number = $request->get('phone_number');
        $student->class = $request->get('class');

        $student->save();

        session()->flash('success', 'Data Berhasil Diperbarui.');
        
        return redirect()->route('student.index');
    }

      public function edit($id)
      {
        $student = student::find($id);
        return view('student.edit', [
            'student' => $student,
        ]);
      }

      public function update(request $request, $id)
      {
        $this->validate($request, [
          'name' => ['required', 'min:3'],
          'address' => ['required', 'min:3'],
          'phone_number' => ['required', 'numeric'],
          'class' => ['required'],
        ]);

        $student = student::find($id);
      
        
        $student->name = $request->get('name');
        $student->address = $request->get('address');
        $student->phone_number = $request->get('phone_number');
        $student->class = $request->get('class');

        $student->save();

        session()->flash('info', 'Data Berhasil Diperbarui.');
        
        return redirect()->route('student.index');
      }

      public function destroy($id)
      {
        $student = student::find($id);

        $student->delete();
        
        session()->flash('danger', 'Data Berhasil Dihapus.');

        return redirect()->route('student.index');
      }
}
