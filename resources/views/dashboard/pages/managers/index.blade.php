@extends('dashboard.layout.main')



@section('body')

<div class="p-6 lg:p-8">

    {{-- Page Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center
                sm:justify-between gap-4 mb-8">

        <div>
            <h1 class="text-2xl font-bold text-slate-800">
                Managers
            </h1>

            <p class="mt-1 text-sm text-slate-400">
                Manage system managers and their accounts.
            </p>
        </div>

        <a href="{{ route('managers.create') }}"
           class="inline-flex items-center justify-center gap-2
                  px-5 py-2.5 rounded-xl
                  bg-indigo-600 text-white
                  text-sm font-semibold
                  shadow-sm shadow-indigo-200
                  hover:bg-indigo-700
                  transition">

            <span class="text-lg leading-none">+</span>
            Add Manager

        </a>

    </div>


    {{-- Managers Card --}}
    <div class="bg-white
                border border-slate-200
                rounded-2xl
                shadow-sm
                overflow-hidden">

        {{-- Card Header --}}
        <div class="px-6 py-5
                    border-b border-slate-100
                    flex items-center justify-between">

            <div>
                <h2 class="text-base font-semibold text-slate-800">
                    All Managers
                </h2>

                <p class="text-xs text-slate-400 mt-1">
                    3 managers found
                </p>
            </div>

        </div>


        {{-- Table --}}
        <div class="overflow-x-auto">

            <table class="w-full text-sm">

                <thead>
                    <tr class="bg-slate-50/70
                               border-b border-slate-100">

                        <th class="px-6 py-4 text-left
                                   text-[11px] font-semibold
                                   uppercase tracking-wider
                                   text-slate-400">
                            #
                        </th>

                        <th class="px-6 py-4 text-left
                                   text-[11px] font-semibold
                                   uppercase tracking-wider
                                   text-slate-400">
                            Name
                        </th>

                        <th class="px-6 py-4 text-left
                                   text-[11px] font-semibold
                                   uppercase tracking-wider
                                   text-slate-400">
                            Email
                        </th>



                        <th class="px-6 py-4 text-right
                                   text-[11px] font-semibold
                                   uppercase tracking-wider
                                   text-slate-400">
                            Actions
                        </th>

                    </tr>
                </thead>


                <tbody class="divide-y divide-slate-100">

                    @foreach ($managers as $key=>$value )
                    <tr class="hover:bg-slate-50/50 transition">

                        <td class="px-6 py-5 text-slate-400">
                            {{++$key}}
                        </td>

                        <td class="px-6 py-5">

                            <div class="flex items-center gap-3">



                                <div>
                                    <p class="font-semibold text-slate-800">
                                       {{$value->name}}
                                    </p>


                                </div>

                            </div>

                        </td>

                        <td class="px-6 py-5 text-slate-500">
                            {{$value->email}}
                        </td>


                        <td class="px-6 py-5">

                            <div class="flex justify-end gap-2">

                                <a href="{{route('managers.edit' , $value->id)}}"
                                   class="px-3 py-2 rounded-lg
                                          bg-indigo-50
                                          text-indigo-600
                                          text-xs font-semibold
                                          hover:bg-indigo-100
                                          transition">

                                    Edit

                                </a>

                                <form action="{{route('managers.destroy',$value->id)}}" method="post">
                                    @csrf
                                    @method('delete')

                                <button
                                    class="px-3 py-2 rounded-lg
                                           bg-red-50
                                           text-red-500
                                           text-xs font-semibold
                                           hover:bg-red-100
                                           transition">

                                    Delete

                                </button>
                                </form>


                            </div>

                        </td>

                    </tr>
                    @endforeach


                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
