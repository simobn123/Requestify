<div class="bg-white shadow-[5px_5px_10px_0px_rgba(161, 172, 184, 0.12] w-300px flex flex-col">  
            <div class="">
                <img src="{{ URL::to('/assets/img/logo.png')}}" alt="" class="w-200px ml-50px mt-50px mr-114px mb-50px">
            </div> 
            <ul class="flex flex-col gap-y-3 pl-4 mt-26px ">
                <li >
                    <a class="flex gap-2 hover:bg-blue-300 hover:rounded pt-2 pb-2" href="">
                         <img src="/assets/img/dash.svg" class="w-17px ml-19px">
                         {{ __('DASHBOARD') }}
                    </a>
                </li>
                <li>
                    <a class="flex gap-2 hover:bg-blue-300 hover:rounded pt-2 pb-2"  href="">  
                        <img src="/assets/img/Page.svg" class="w-17px ml-19px">
                        {{ __('LEAVE MANAGEMENT') }}
                    </a>
                </li>
                <li>
                    <a class="flex gap-2 hover:bg-blue-300 hover:rounded pt-2 pb-2" href=""> 
                        <img src="/assets/img/Vector.svg" class="w-17px ml-19px">
                        {{ __('HOME OFFICE MANAGEMENT') }}
                    </a>
                </li>
                <li>
                    <a class="flex gap-2 hover:bg-blue-300 hover:rounded pt-2 pb-2" href="">
                        <img src="/assets/img/Vector (1).svg" class="w-17px ml-19px">
                        {{ __('DOCUMENT REQUEST') }}
                    </a>
                </li>
                <li>
                    <a class="flex gap-2 hover:bg-blue-300 hover:rounded pt-2 pb-2" href="">
                        <img src="/assets/img/Group.svg" class="w-17px ml-19px">
                        {{ __('MATERIELS REQUESTS') }}
                    </a>
                </li>
                <li>
                    <a class="flex gap-2 hover:bg-blue-300 hover:rounded pt-2 pb-2" href="">
                        <img src="/assets/img/hist.svg" class="w-17px ml-19px">
                        {{ __('HISTORY') }}
                    </a>
                </li>
                <li>
                    <a class="flex gap-2 mt-500px mb-50px hover:bg-blue-300 hover:rounded pt-2 pb-2" href="">
                        <img src="/assets/img/SET.png" class="w-17px ml-19px">
                        {{ __('SETTINGS') }}
                    </a>
                </li>
            </ul>
        </div> 