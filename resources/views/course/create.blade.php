<x-layout>

    {{-- //seo -search engine ooptimization --}}
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between">
                <h1 class="text-5xl font-bold">
                    Create Course
                </h1>
                <a class="bg-(--primary)/90 hover:bg-(--primary) px-3 py-3 rounded-full duration-300 text-white font-semibold"
                    href="/course/index">Go back-></a>
            </div>

            <div class="mt-10">
                <form action="/course/store" method="post">
                    @csrf
                   <div>
                     <div>
                        <label for="name">Course Name</label>
                        <input placeholder="enter your full name" type="text" name="full_name" id="name"
                            class="border w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="border w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="remarks">Remarks</label>
                        <input type="text" name="remarks" id="remarks" class="border w-full px-2 py-1">
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
