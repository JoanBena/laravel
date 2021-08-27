<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses List') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('teacher.courses.update', $course->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="course_code" class="block font-medium text-sm text-gray-700">Code</label>
                            <input name="course_code" id="course_code" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('course_code', $course->course_code) }}" />
                            @error('course_code')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name_course" class="block font-medium text-sm text-gray-700">Name Course</label>
                            <input name="name_course" id="name_course" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name_course', $course->name_course) }}" />
                            @error('name_course')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="number_credit" class="block font-medium text-sm text-gray-700">Number Credit</label>
                            <input name="number_credit" id="number_credit" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('number_credit', $course->number_credit) }}" />
                            @error('number_credit')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name_prof" class="block font-medium text-sm text-gray-700">Name Profe</label>
                            <input name="name_prof" id="number_credit" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name_prof', $course->name_prof) }}" />
                            @error('name_prof')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-teacher-layout>
