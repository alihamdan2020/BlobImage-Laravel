<h1>jawad</h1>
@foreach ($allstudents as $student)
    <span>{{$student->studentName}}</span>
    <img src="{{route('getImage', ['id' => $student->id])}}" alt="">
@endforeach

<hr>

@foreach ($allteachers as $teacher)
    <span>{{$teacher->teacherName}}</span>
@endforeach
