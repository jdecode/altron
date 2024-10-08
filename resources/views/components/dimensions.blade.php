@if(app()->environment('local'))
    <div
        class="fixed z-50 left-0 bottom-0
            bg-black/5 text-black
            dark:bg-white/5 dark:text-white
            p-4 px-8
            backdrop-blur-sm
            text-lg font-bold
            transition-all duration-100
            rounded-2xl
            border-orange-600 border-2"
        title="Screen size indicator">
    <span class="sm:hidden">
        default &lt;640px
    </span>
        <span class="hidden sm:block md:hidden">
        sm &lt;768px
    </span>
        <span class="hidden md:block lg:hidden">
        md &lt;1024px
    </span>
        <span class="hidden lg:block xl:hidden">
        lg &lt;1280px
    </span>
        <span class="hidden xl:block 2xl:hidden">
        xl &lt;1536px
    </span>
        <span class="hidden 2xl:block">
        2xl &gt;1536px
    </span>
    </div>
@endif
