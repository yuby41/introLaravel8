<div class="grid grid-cols-6 gap-4 mt-8 m-6">
    @foreach($courses as $course)
        <x-course-card :course="$course"/>
    @endforeach
</div>
