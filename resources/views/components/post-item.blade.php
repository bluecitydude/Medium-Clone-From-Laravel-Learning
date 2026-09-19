 <a href="#"
     class="flex flex-col items-center bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs md:flex-row  md:flex-row  mb-8">
     <img class="object-cover rounded-base h-64 md:h-auto md:w-64 mb-4 md:mb-0"
         src="https://flowbite.com/docs/images/blog/image-4.jpg" alt="">
     <div class="flex flex-col justify-between md:p-4 leading-normal">
         <h5 class="mb-2 text-4xl font-bold tracking-tight text-heading">{{ $post->title }}</h5>
         <div class="mb-6 text-body">{{ Str::words($post->content, 15) }}</div>
         <div>
             <x-primary-button>

                 Read more
             </x-primary-button>

         </div>
     </div>
 </a>
