<x-postform>
    <section class="px-6 py-8 max-w-md mx-auto">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounder-xl">
            <h1 class="text-lg font-bold mb-4">
                Publish New Post
            </h1>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                    </label>
                    <input class="border border-grey-400 p-2 w-full" type="text" name="title" id="title" value="{{old('title')}}" required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                    </label>
                    <input class="border border-grey-400 p-2 w-full" type="text" name="slug" id="slug" value="{{old('slug')}}" required>
                    @error('slug')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="source">
                            Source
                        </label>
                        <input class="border border-grey-400 p-2 w-full" type="text" name="source" id="source" value="{{ old('source') }}" >
                        @error('source')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>


              <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                        Thumbnail
                    </label>

                    <input class="border border-grey-400 p-2 w-full" type="file" name="thumbnail" id="thumbnail"  required>
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt
                    </label>
                    <textarea class="border border-grey-400 p-2 w-full" name="excerpt" id="excerpt" required>{{old('excerpt')}}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body
                    </label>
                    <textarea class="border border-grey-400 p-2 w-full" name="body" id="body" required>{{old('body')}}</textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                        Category
                    </label>
                    
                    <select name="category_id" id="category_id">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{old('category_id')==$category->id?'selected':''}}>
                                {{ucwords($category->name)}}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                
       <button type="submit">Publish</button>

            </form>
        </main>
    </section>

</x-postform>