@extends('layouts.main')


@section('content')
    <div class="addPatient absolute top-[59px] left-[275px] h-[280vh] w-[85.3vw] p-[45px]">
        <div class=" h-full">

            <form action="{{ url('/patientPage/admission') }}" method="POST">
                @csrf
                <div class="admissionForm h-full text-[1.5rem] tracking-[2px]">
                    {{-- admissionformfirst_sec --}}
                    <div class="h-[67.5vh] border-2 border-black">
                        {{-- name --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-[70px]">
                            <div class="border-r-2 border-black col-span-5 flex items-center gap-[5px] px-[10px]">
                                <p>NAME OF HOSPITAL :</p>
                                <p>San Miguel District Hospital</p>
                            </div>
                            <div class="flex items-center gap-[5px] col-span-3 px-[10px]">
                                <p>HOSP CODE:</p>
                                <p>0000122</p>
                            </div>
                        </div>

                        {{-- address --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-[70px]">
                            <div class="border-r-2 border-black col-span-5 flex items-center gap-[5px] px-[10px]">
                                <p class="w-[18%]">ADDRESS :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter address" name="address" value="{{ $update_data->address }}" readonly>
                            </div>
                            <div class="flex items-center gap-[5px] col-span-3 px-[10px]">
                                <p class="w-[107%]">HEALTH RECORD NO:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter latest record #" value="{{ $update_data->id }}" readonly>
                            </div>
                        </div>


                        {{-- sr citizen number --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-[75px]">
                            <div class="col-span-3 border-r-2 border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[61%]">SR CITIZEN NO:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter sr.citizen #" name="sr_no"
                                    value="{{ $update_first->sr_no ?? 'N/A' }}" readonly>
                            </div>
                            <div class="col-span-2 flex justify-center items-center border-r-2 border-black">
                                <p class="font-bold">CLINICAL COVER SHEET</p>
                            </div>
                            <div class="col-span-3 flex items-center gap-[5px] px-[10px]">
                                <p class="w-[176%]">OLD HEALTH RECORD NO:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="old record #">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- patients border --}}
                        <div class="grid grid-cols-8 border-b-2 border-black h-[100px]">
                            <div class="border-r-2 border-black flex items-start px-[10px]">
                                <p>PATIENT'S NAME :</p>
                            </div>
                            <div class="border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>(Last)</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="last name" name="last_name" value="{{ $update_data->last_name }}" readonly>
                            </div>
                            <div
                                class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>(Given)</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="given name" name="first_name" value="{{ $update_data->first_name }}"
                                    readonly>
                            </div>
                            <div class=" border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>(Middle)</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="middle name" name="middle_name" value="{{ $update_data->middle_name }}"
                                    readonly>
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>WARD/ROOM/BED/SERVICE :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter ward/room/bed/service type">
                            </div>

                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- perma address --}}
                        <div class="grid grid-cols-11 border-b-2 border-black h-[100px]">
                            <div
                                class="col-span-5 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>PERMANENT ADDRESS :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter permanent address" name="perma_address"
                                    value="{{ $update_first->perma_address ?? 'N/A' }}" readonly>
                            </div>
                            <div
                                class="col-span-2 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>TEL. NO. :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="enter telephone #" name="phone"
                                    value="{{ $update_first->phone ?? 'N/A' }}" readonly>
                            </div>
                            <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>SEX:</p>
                                <div class="w-full flex justify-around text-[1.3rem]">
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Male" name="sex"
                                            {{ $update_data->gender == 'Male' ? 'checked' : 'disabled' }}>
                                        <label>M</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Male" name="sex"
                                            {{ $update_data->gender == 'Female' ? 'checked' : 'disabled' }}>
                                        <label>F</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>CIVIL STATUS:</p>
                                <div class="w-full flex justify-around text-[1.3rem]">
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Single" name="civil_status"
                                            {{ $update_first->civil_status == 'Single' ? 'checked' : 'disabled' }}>
                                        <label>S</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Divorced" name="civil_status"
                                            {{ $update_first->civil_status == 'Divorced' ? 'checked' : 'disabled' }}>
                                        <label>D</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Separated" name="civil_status"
                                            {{ $update_first->civil_status == 'Separated' ? 'checked' : 'disabled' }}>
                                        <label>SEP</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Common Law" name="civil_status"
                                            {{ $update_first->civil_status == 'Common Law' ? 'checked' : 'disabled' }}>
                                        <label>C</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Widowed" name="civil_status"
                                            {{ $update_first->civil_status == 'Widowed' ? 'checked' : 'disabled' }}>
                                        <label>W</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Married" name="civil_status"
                                            {{ $update_first->civil_status == 'Married' ? 'checked' : 'disabled' }}>
                                        <label>M</label>
                                    </div>
                                    <div class="col-span-2 inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="Neutral" name="civil_status"
                                            {{ $update_first->civil_status == 'Neutral' ? 'checked' : 'disabled' }}>
                                        <label>N</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- birthdate border --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-[100px]">
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>BIRTHDATE</p>
                                <input type="date"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    name="birthday" value="{{ $update_first->birthday }}" readonly>
                            </div>
                            <div class="border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>AGE</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="age" name="age" value="{{ $update_data->age }}" readonly>
                            </div>
                            <div
                                class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>BIRTHPLACE</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="birthplace" name="birthplace" value="{{ $update_first->birthplace }}"
                                    readonly>
                            </div>
                            <div
                                class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>NATIONALITY</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="nationality" name="nationality"
                                    value="{{ $update_first->nationality }}" readonly>
                            </div>
                            <div
                                class="col-span-2 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>RELIGION</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="religion" name="religion" value="{{ $update_first->religion }}"
                                    readonly>
                            </div>
                            <div class="col-span-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>OCCUPATION</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="occupation" name="occupation" value="{{ $update_first->occupation }}"
                                    readonly>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-black h-[30px]"></div>
                    </div>


                    {{-- admissionformsecond_sec --}}
                    <div class="h-[46vh] border-t-0 border-2 border-black">

                        {{-- employee --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-[100px]">
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>EMPLOYER(Type of Business)</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_name"
                                    value="{{ $update_second->employer_name ?? 'N/A' }}">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_address"
                                    value="{{ $update_second->employer_address ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="employer_phone"
                                    value="{{ $update_second->employer_phone ?? 'N/A' }}">
                            </div>
                        </div>

                        {{-- father --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-[100px]">
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>FATHER'S NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_name"
                                    value="{{ $update_second->father_phone ?? 'N/A' }}">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_address"
                                    value="{{ $update_second->father_address ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="father_phone"
                                    value="{{ $update_second->father_phone ?? 'N/A' }}">
                            </div>
                        </div>

                        {{-- mother --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-[100px]">
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>MOTHER'S(MAIDEN) NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_maiden_name"
                                    value="{{ $update_second->mother_maiden_name ?? 'N/A' }}">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_address"
                                    value="{{ $update_second->mother_address ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="mother_phone"
                                    value="{{ $update_second->mother_phone ?? 'N/A' }}">
                            </div>
                        </div>

                        {{-- spouse --}}
                        <div class="grid grid-cols-9 border-b-2 border-black h-[100px]">
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>SPOUSE NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_name"
                                    value="{{ $update_second->spouse_name ?? 'N/A' }}">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>ADDRESS</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_address"
                                    value="{{ $update_second->spouse_address ?? 'N/A' }}">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>TEL. NO.</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available" name="spouse_phone"
                                    value="{{ $update_second->spouse_phone ?? 'N/A' }}">
                            </div>
                        </div>
                        {{-- empty border --}}
                        <div class="border-black h-[30px]"></div>
                    </div>


                    {{-- admissionformthird_sec --}}
                    <div class="h-[49vh] border-t-0 border-2 border-black">
                        {{-- Admission --}}
                        <div class="grid grid-cols-10 border-b-2 border-black h-[170px]">
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ADMISSION</p>
                                <div class="text-[1.3rem] w-full flex flex-col items-end gap-[20px]">
                                    <div class="flex">
                                        <label class="pt-[3px]">Date: </label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available">
                                    </div>
                                    <div class="flex">
                                        <label class="pt-[3px]">Time: </label>
                                        <input type="time"
                                            class="w-[203px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>DISCHARGE</p>
                                <div class="text-[1.3rem] w-full flex flex-col items-end gap-[20px]">
                                    <div class="flex">
                                        <label class="pt-[3px]">Date: </label>
                                        <input type="date"
                                            class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available">
                                    </div>
                                    <div class="flex">
                                        <label class="pt-[3px]">Time: </label>
                                        <input type="time"
                                            class="w-[203px] border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                            placeholder="N/A if not available">
                                    </div>
                                </div>
                            </div>
                            <div class=" border-r-2 border-black flex flex-col items-center gap-y-[10px] px-[10px]">
                                <p>TOTAL NO. OF DAYS:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="# of days">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ADMITTING PHYSICIAN:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of physician">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- Admitting clerk --}}
                        <div class="grid grid-cols-2 border-b-2 border-black h-[100px]">
                            <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ADMITTING CLERK :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                            <div class="border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ATTENDING PHYSICIAN SIGNATURE:</p>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- type of admission --}}
                        <div class="grid grid-cols-2 border-b-2 border-black h-[100px]">
                            <div class="border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>TYPE OF ADMISSION :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of clerk">
                            </div>
                            <div class="border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>REFERRED BY:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of clerk">
                            </div>
                        </div>
                    </div>

                    {{-- admissionformfourth_sec --}}
                    <div class="h-[56.2vh] border-t-0 border-2 border-black">
                        {{-- ssc --}}
                        <div class="grid border-b-2 border-black h-[70px]">
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[50%]">SOCIAL SERVICE CLASSIFICATION :</p>
                                <div class=" w-full flex justify-around text-[1.3rem]">
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="a" name="ssc">
                                        <label>A</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="b" name="ssc">
                                        <label>B</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_one" name="ssc">
                                        <label>C1</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_two" name="ssc">
                                        <label>C2</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="c_three" name="ssc">
                                        <label>C3</label>
                                    </div>
                                    <div class="inline">
                                        <input class="scale-125 cursor-pointer accent-blue-300" type="radio"
                                            value="d" name="ssc">
                                        <label>D</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- alert allergic to --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-[145px]">
                            <div
                                class="col-span-2 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>ALERT</p>
                                <p>ALLERGIC TO:</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="allergic to">
                            </div>
                            <div
                                class="col-span-4 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>HOSPITALIZATION PLAN</p>
                                <p>COMPANY/INDUSTRIAL NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>HEALTH</p>
                                <p>INSURANCE NAME</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>TYPE OF INSURANCE</p>
                                <p>COVERAGE</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- data furnished by --}}
                        <div class="grid grid-cols-12 border-b-2 border-black h-[120px]">
                            <div
                                class="col-span-6 border-r-2 border-black flex flex-col items-start justify-center gap-y-[10px] px-[10px]">
                                <p>DATA FURNISHED BY(signature over printed name)</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="name of attendant">
                            </div>
                            <div
                                class="col-span-3 border-r-2 border-black flex flex-col items-start justify-center gap-y-[10px] px-[10px]">
                                <p>ADDRESS OF INFORMANT</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                            <div
                                class="col-span-3 border-black flex flex-col items-start justify-center gap-y-[10px] px-[10px]">
                                <p>RELATION TO PATIENT</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>


                        {{-- admission diagnosis --}}
                        <div class="grid border-b-2 border-black h-[70px]">
                            <div class="border-black flex items-center gap-[5px] px-[10px]">
                                <p class="w-[27.5%]">ADMISSION DIAGNOSIS :</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-black h-[30px]"></div>
                    </div>

                    {{-- admissionformfifth_sec --}}
                    <div class="h-[34.2vh] border-t-0 border-2 border-black">
                        {{-- principal diagnosis --}}
                        <div class="grid grid-cols-12 border-t-0 border-b-2 border-black h-[120px]">
                            <div class="col-span-9 border-r-2 border-black flex flex-col justify-center gap-[10px]">
                                <div class="border-black flex flex-row gap-[5px] px-[10px]">
                                    <p class="w-[39%]">PRINCIPAL DIAGNOSIS :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                                <div class="border-black flex flex-row  gap-[5px] px-[10px]">
                                    <p class="w-[31%]">OTHER DIAGNOSIS :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                            </div>
                            <div class="col-span-3 border-black flex flex-col items-start gap-y-[10px] px-[10px]">
                                <p>IDC CODE NO.</p>
                                <input type="text"
                                    class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                    placeholder="N/A if not available">
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="border-b-2 border-black h-[30px]"></div>

                        {{-- principal operation --}}
                        <div class="grid grid-cols-12 border-black h-[120px] py-[10px]">
                            <div class="col-span-9 border-black flex flex-col justify-start gap-[10px] ">
                                <div class="border-black flex flex-row items-center gap-[5px] px-[10px]">
                                    <p class="w-[78%]">PRINCIPAL OPERATION PROCEDURE :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                                <div class="border-black flex items-center gap-[5px] px-[10px]">
                                    <p class="w-[65%]">OTHER OPERATION PROCEDURE :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="N/A if not available">
                                </div>
                            </div>
                            <div class="col-span-3 border-black flex flex-col justify-start gap-[10px]">
                                <div class="border-black flex items-center gap-[5px] px-[10px]">
                                    <p class="w-[90%]">ICPM CODE :</p>
                                    <input type="text"
                                        class="w-full border-4 border-blue-300 focus:border-blue-200 focus:outline-blue-200 px-[10px] focus:outline-offset-2"
                                        placeholder="ICPM code">
                                </div>
                            </div>
                        </div>

                        {{-- empty border --}}
                        <div class="h-[50px] flex justify-end">
                            <div
                                class="flex flex-row gap-[10px] items-center border-l-2 border-t-2 border-black w-50 px-[10px]">
                                <p>{{ $update_data->id }}</p>
                                <p>12/8/2022</p>
                                <p>8:30AM</p>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
