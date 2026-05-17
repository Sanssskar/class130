<x-layout>

    {{-- //seo -search engine ooptimization --}}
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between">
                <h1 class="text-5xl font-bold">
                    Edit Booking
                </h1>
                <a class="bg-(--primary)/90 hover:bg-(--primary) px-3 py-3 rounded-full duration-300 text-white font-semibold"
                    href="{{route('booking.index')}}">Go back-></a>
            </div>

            <div class="mt-10">
                <form action="{{ route('booking.update',$enrollment->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div>
                        <div>
                            <label for="name">Your Name</label>
                            <input placeholder="enter your full name" type="text" name="name" id="name"
                                class="border w-full px-2 py-1" value="{{$enrollment->name}}">
                        </div>
                        <div>
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="border w-full px-2 py-1" value="{{$enrollment->email}}">
                        </div>
                        <div>
                            <label for="course_id">Courses</label>
                            <select name="course_id" id="course_id" class="border w-full px-2 py-1">
                                @foreach ($courses as $course)
                                    <option value="{{$course->id}}" {{$course->id == $enrollment->course_id ? 'selected' : ''}}>{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-2">
                            <button
                                class="bg-(--primary)/90 hover:bg-(--primary) px-3 py-3 rounded duration-300 text-white font-semibold "
                                type="submit">Submit Details</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
