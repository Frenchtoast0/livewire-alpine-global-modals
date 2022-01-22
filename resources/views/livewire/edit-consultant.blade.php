<div class="mx-auto max-w-2xl">
    <div class="flex justify-between items-end mb-5">
        <div class="flex justify-around items-baseline space-x-1 mr-8 text-blue-300">
            <span class="text-2xl">Consultant</span>
            <span class="text-xs text-blue-400">New</span>
        </div>
        <div>
            <a class="border-b border-blue-400 text-xs cursor-pointer" wire:click="save()">Save</a>&nbsp;&nbsp;<a class="text-gray-400 text-xs cursor-pointer" href="/">Cancel</a>
        </div>
    </div>
    <form class="p-1 md:px-2 mx-2 lg:mx-4 border border-gray-800 pb-1 ">
        <h2 class="text-gray-300">Contact Information</h2>
        <label for="name" class="block my-1">
            <input wire:model="name" id="name" type="text" autocomplete="nope"  class="bg-gray-600 text-white w-full py-1 px-4 rounded-md focus:outline-none focus:bg-gray-500 focus:border focus:border-blue-600
            @error('name') border border-red-500 @enderror" placeholder="Consultant's Name" >
            @error('name') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
        </label>
        <label for="company" class="block my-1">
            <input wire:model="company" type="text" id="company" autocomplete="nope" class="bg-gray-600 text-white w-full py-1 px-4 my-0.5 rounded-md focus:outline-none focus:bg-gray-500 focus:border focus:border-blue-600
            @error('company') border border-red-500 @enderror" placeholder="Company Name (optional)" >
            @error('company') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
        </label>
        <label for="phone" class="block my-1">
            <input wire:model="phone" type="text" id="phone" autocomplete="nope"
                   class="bg-gray-600 text-white w-full py-1 px-4 my-0.5 rounded-md focus:outline-none focus:bg-gray-500 focus:border focus:border-blue-600
            @error('phone') border border-red-500 @enderror" placeholder="Phone Number" >
            @error('phone') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
        </label>
        <label for="email" class="block my-1">
            <input wire:model="email" type="text" id="email" autocomplete="nope" class="bg-gray-600 text-white w-full py-1 px-4 my-0.5 rounded-md focus:outline-none focus:bg-gray-500 focus:border focus:border-blue-600
            @error('email') border border-red-500 @enderror" placeholder="Email Address" >
            @error('email') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
        </label>
        <div class="flex flex-col md:flex-row w-full justify-between md:space-x-3 my-1">
            <label for="rate_currency" class="block flex-shrink w-full md:w-auto">
                <select wire:model="rate_currency" type="text" id="rate_currency"
                        class="bg-gray-600 text-white py-1 px-4 my-0.5 w-full focus:outline-none focus:bg-gray-500
                        appearance-none rounded-md
                @error('rate_currency') border border-red-500 @enderror">
                    <option selected>CAD$</option>
                    <option>USD$</option>
                    <option>Euro</option>
                </select>
                @error('rate_currency') <div class="text-red-400 text-right italic text-xxs my-1">{{ $message }}</div> @enderror
            </label>
            <label for="rate" class="block flex-grow w-full md:w-auto my-1 md:my-0">
                <input wire:model="rate" type="text" id="rate"
                       class="bg-gray-600 text-white py-1 px-4 my-0.5 w-full focus:outline-none focus:bg-gray-500 focus:border
                       focus:border-blue-600 rounded-md
                @error('rate') border border-red-500 @enderror" placeholder="Billing Rate" autocomplete="nope" >
                @error('rate') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
            </label>
            <label for="rate_frequency" class="block flex-shrink w-full md:w-auto">
                <select wire:model="rate_frequency" type="text" id="rate_frequency"
                        class="bg-gray-600 text-white py-1 w-full px-4 my-0.5 focus:outline-none focus:bg-gray-500
                        appearance-none rounded-md
                @error('rate_frequency') border border-red-500 @enderror" placeholder="Hourly/Monthly">
                    <option value="" selected>Frequency</option>
                    <option>Per Hour</option>
                    <option>Per Day</option>
                    <option>Per Month</option>
                </select>
                @error('rate_frequency') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
            </label>
        </div>
        <label for="platform" class="block w-my-1">
            <select wire:model="platform" type="text" id="platform" autocomplete="nope"
                    class="bg-gray-600 text-white py-1 px-4 my-0.5 w-full focus:outline-none focus:bg-gray-500
                        appearance-none rounded-md
                @error('platform') border border-red-500 @enderror">
                <option value="" selected>Select Platform</option>
                <option value="None">None/Direct</option>
                <option>Freelancer</option>
                <option>Fiverr</option>
                <option>Upwork</option>
            </select>
            @error('platform') <div class="text-red-400 text-right italic text-xxs my-1">{{ $message }}</div> @enderror
        </label>
        @if($platform != "None" && $platform != "")
        <label for="platform_profile" class="block my-1">
            <input wire:model="platform_profile" type="text" id="platform_profile" autocomplete="nope"
                   class="bg-gray-600 text-white w-full py-1 px-4 my-0.5
                   rounded-md focus:outline-none focus:bg-gray-500 focus:border focus:border-blue-600
            @error('platform_profile') border border-red-500 @enderror" placeholder="Freelance Profile URL" >
            @error('platform_profile') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
        </label>
        @endif
        <label for="linkedin" class="block my-1">
            <input wire:model="linkedin" type="text" id="linkedin" autocomplete="nope"
                   class="bg-gray-600 text-white w-full py-1 px-4 my-0.5 rounded-md focus:outline-none
                   focus:bg-gray-500 focus:border focus:border-blue-600
            @error('linkedin') border border-red-500 @enderror" placeholder="LinkedIn Profile URL" >
            @error('linkedin') <div class="text-red-400 text-right italic text-xxs my-0">{{ $message }}</div> @enderror
        </label>
    </form>
    <div class="mt-5 p-1 md:px-2 mx-2 lg:mx-4 border border-gray-800  pb-3 ">
        <div class="flex md:flex-row flex-col py-1 justify-between w-full flex-wrap">
             <h2 class="text-gray-300 flex-grow">Fields of Expertise</h2>
            <div class="flex-shrink">
                <input wire:model.debounce.500ms="searchTerm"
                       class="bg-gray-600 w-full md:w-auto text-white rounded-md text-xs px-2 py-0.5 focus:outline-none focus:bg-gray-500"
                       placeholder="Search" type="search">
            </div>
        </div>
        <span class="flex items-center flex-wrap w-full">
            @foreach($tags as $tag)
                <a class="align-middle color-white rounded-md px-1 py-0.5 text-xs mx-0.25 my-0.25 cursor-pointer select-none
                @if(isset($selected_tags[$tag->id])) bg-green-700 @else bg-gray-700 @endif"
                wire:click="toggleTag({{$tag}})">{{$tag->name}}</a>
            @endforeach
        </span>
    </div>
    <div class="mt-5 p-1 md:px-2 mx-2 lg:mx-4  border border-gray-800">
        <div class="flex justify-between w-full">
            <h2 class="text-gray-300 flex-grow">Notes</h2>
        </div>
            <textarea
                class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    bg-gray-600 text-white  bg-clip-padding
                    border border-solid border-gray-700
                    rounded
                    transition
                    ease-in-out
                    m-0 focus:bg-gray-500
                    mb-3
                     focus:border-blue-600 focus:outline-none
                  "
        id="exampleFormControlTextarea1"
                wire:model="notes"
        rows="3"
        placeholder="Additional Notes"
            ></textarea>
        </div>
    </div>
{{--    <div class="mt-5 px-2 md:mx-12 border border-gray-800">--}}
{{--        <div class="flex py-2 justify-between w-full">--}}
{{--            <h2 class="text-gray-300 flex-grow">Reviews</h2>--}}

{{--        </div>--}}
{{--    </div>--}}
</div>
