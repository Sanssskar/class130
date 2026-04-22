<x-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between">
                <h1 class="text-5xl  font-bold">Course Table</h1>
                <a class="bg-(--primary)/90 px-2 py-2 rounded-full text-white" href="/course/create">Create Course+</a>
            </div>
        </div>
    </section>

    {{-- {{$courses}} --}}

    <section>
        <div class="container">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border py-1">S.N</th>
                        <th class="border py-1">Course Name</th>
                        <th class="border py-1">Price</th>
                        <th class="border py-1">Remarks</th>
                        <th class="border py-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td class="border text-center py-2">{{$loop->iteration}}</td>
                            <td class="border text-center py-2">{{$course->name}}</td>
                            <td class="border text-center py-2">{{$course->price}}</td>
                            <td class="border text-center py-2">{{$course->remarks}}</td>
                            <td class="flex justify-center border text-center py-2">
                                <a href="/course/edit/{{$course->id}}"
                                    class="bg-green-400 px-3 py-1 rounded-full font-semibold text-white">Edit</a>
                                    <form action="/course/delete/{{$course->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-red-400 px-3 py-1 rounded-full font-semibold text-white" type="submit">
                                            Delete
                                        </button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
