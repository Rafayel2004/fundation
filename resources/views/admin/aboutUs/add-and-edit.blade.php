@extends("admin.layouts.app")
@section("content")
   <div class="container-fluid show">
       <h3 class="mt-2 mb-5 ">Add Member</h3>
       @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
       <form action="{{route("about.$type" , !empty($member) ? $member->id : null) }}" method="POST" class="about-us-form" enctype="multipart/form-data">
           @csrf
           @if(!empty($member))
               @method("PUT")
           @else
               @method("POST")
           @endif
           <div class="custom-file mb-5">
               <label class="custom-file-label" for="validatedCustomFile">{!! !empty($member) ? $member->image : "Choose file..." !!}</label>
               <input
                   name="image"
                   type="file"
                   accept="image/x-png,image/gif,image/jpeg"
                   class="custom-file-input"
                   id="validatedCustomFile"
                   {!! empty($member) ? "required" : "" !!}>
           </div>
           <div class="d-flex justify-content-between">
               <div class="border form-language border-dark p-4">
                   <h3 class="text-center">English</h3>
                    <div class="form-group">
                        <label for="fullNameEn">Full Name</label>
                        <input
                            type="text"
                            name="fullNameEn"
                            class="form-control"
                            placeholder="Please write full name"
                            id="fullNameEn" required
                            value="{!! !empty($member) ? $member->full_name_en : old("fullNameEn") !!}">
                    </div>
                   <div class="form-group">
                       <label for="fullNameEn">Profession</label>
                       <input
                           type="text"
                           name="professionEn"
                           class="form-control"
                           placeholder="Please write Profession"
                           id="fullNameEn" required
                           value="{!! !empty($member) ? $member->profession_en : old("professionEn") !!}">
                   </div>
               </div>
               <div class="border form-language ms-3 border-dark p-4">
                   <h3 class="text-center"> Russian</h3>
                   <div class="form-group">
                       <label for="fullNameRu">Full Name</label>
                       <input
                           type="text"
                           name="fullNameRu"
                           class="form-control"
                           placeholder="Please write full name"
                           id="fullNameRu" required
                           value="{!! !empty($member) ? $member->full_name_ru : old("fullNameRu") !!}">
                   </div>
                   <div class="form-group">
                       <label for="professionRu">Profession</label>
                       <input
                           type="text"
                           name="professionRu"
                           class="form-control"
                           placeholder="Please write Profession"
                           id="professionRu" required
                           value="{!! !empty($member) ? $member->profession_ru : old("professionRu") !!}">
                   </div>
               </div>
               <div class="border ms-3 form-language border-dark p-4">
                   <h3 class="text-center"> Armenian</h3>
                   <div class="form-group">
                       <label for="fullNameHy">Full Name</label>
                       <input type="text"
                              name="fullNameHy"
                              class="form-control"
                              placeholder="Please write full name"
                              id="fullNameHy" required
                              value="{!! !empty($member) ? $member->full_name_hy : old("fullNameHy") !!}">
                   </div>
                   <div class="form-group">
                       <label for="professionHy">Profession</label>
                       <input
                           type="text"
                           name="professionHy"
                           class="form-control"
                           placeholder="Please write Profession"
                           id="professionHy" required
                           value="{!! !empty($member) ? $member->profession_hy : old("professionHy") !!}">
                   </div>
               </div>
           </div>
           <button type="submit" class="btn btn-success mt-5">Submit</button>
       </form>
   </div>
@endsection
