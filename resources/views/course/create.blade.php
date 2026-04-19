<x-layout>

    {{-- //seo -search engine ooptimization --}}
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between">
                <h1 class="text-5xl font-bold">
                    Create Data
                </h1>
                <a class="bg-(--primary)/90 hover:bg-(--primary) px-3 py-3 rounded-full duration-300 text-white font-semibold"
                    href="">Go back-></a>
            </div>

            <div class="mt-10">
                <form action="/course/store" method="post">
                    <div>
                        <label for="name">FUll Name</label>
                        <input placeholder="enter your full name" type="text" name="" id="name"
                            class="border w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="" id="email" class="border w-full px-2 py-1">
                    </div>
                    <div>
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="" id="phone" class="border w-full px-2 py-1">
                    </div>
                    <div class="mt-2">
                        <button
                            class="bg-(--primary)/90 hover:bg-(--primary) px-3 py-3 rounded duration-300 text-white font-semibold "
                            type="submit">Submit Details</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
