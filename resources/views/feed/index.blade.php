<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Feed Index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="text-center w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-lg text-grey-dark border-b border-grey-light">feed</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feeds as $feed)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <h3 class="text-left font-bold text-lg text-grey-dark">{{$feed->feed}}</h3>
                                    <div class="flex">
                                        <!-- 更新ボタン -->
                                        <!-- 削除ボタン -->
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('common.errors')
                    <form class="mb-6" action="{{ route('feed.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col mb-4">
                            <!-- <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="feed">User_id消す</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="integer" name="user_id" id="user_id"> -->
                            <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="feed">Feed</label>
                            <input class="border py-2 px-3 text-grey-darkest" type="text" name="feed" id="feed">
                        </div>
                        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>