<form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="teacherImage">teacher image</label>
                    <input type="file" name="teacherImage" id="teacherImage">
                    <span>
                        @error('teacherImage')
                        {{$message}}
                        @enderror
                    </span>

                    <label for="teacherName">teacher name</label>
                    <input type="text" name="teacherName" id="teacherName">
                    <span>
                        @error('teacherName')
                        {{$message}}
                        @enderror
                    </span>
                    <input type="submit" value="submit">
</form>

<hr>

<form action="{{route('createNewStudent')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="studentImage">student image</label>
                    <input type="file" name="studentImage" id="studentImage">
                    <span>
                        @error('studentImage')
                        {{$message}}
                        @enderror
                    </span>

                    <label for="studentName">student name</label>
                    <input type="text" name="studentName" id="studentName">
                    <span>
                        @error('studentName')
                        {{$message}}
                        @enderror
                    </span>
                    <input type="submit" value="submit">
</form>
