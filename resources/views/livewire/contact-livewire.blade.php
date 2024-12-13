<div>
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-sm-5">
                <img src="{{asset('storage/'.$discuss->image)}}" alt="contact" class="img-fluid">
            </div>
            <div class="col-sm-7">
                <h3 class="font-weight-medium text-dark mt-5 mt-lg-0">{{__('pages.Apply Application')}}</h3>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="fname" id="name" placeholder="{{__('pages.First_Name')}}*">
                                @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="lname" id="name" placeholder="{{__('pages.Last_Name')}}*">
                                @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="number" class="form-control" wire:model="age" id="mail" placeholder="{{__('pages.Age')}}*">
                                @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control" wire:model="gender">
                                    <option>{{__('pages.Select Gender')}}</option>
                                    <option value="male">{{__('pages.Male')}}</option>
                                    <option value="female">{{__('pages.Female')}}</option>
                                </select>
                                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" wire:model="phone" class="form-control" id="mail" placeholder="{{__('pages.Phone')}}*">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" wire:model="whatsapp" class="form-control" id="mail" placeholder="{{__('pages.Whatsapp')}}*">
                                @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="telegram" id="mail" placeholder="{{__('pages.Telegram')}}*">
                                @error('telegram') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control" wire:model="course">
                                    <option value="Choose the course">{{__('pages.Choose the course')}}</option>
                                    <option value="Arabic">{{__('pages.Arabic')}}</option>
                                    <option value="Quran & Tajweed">{{__('pages.Quran & Tajweed')}}</option>
                                    <option value="Quranic Arabic">{{__('pages.Quranic Arabic')}}</option>
                                    <option value="Fusha (classical Arabic)">{{__('pages.Fusha (classical Arabic)')}}</option>
                                    <option value="Grammar">{{__('pages.Grammar')}}</option>
                                    <option value="Egyptian Arabic">{{__('pages.Egyptian Arabic')}}</option>
                                    <option value="Conversation Arabic">{{__('pages.Conversation Arabic')}}</option>
                                    <option value="Arabic language Camp In Egypt">{{__('pages.Arabic language Camp In Egypt')}}</option>
                                </select>
                                @error('course') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="email" class="form-control" wire:model="email" id="mail" placeholder="{{__('pages.Email')}}*">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" wire:model="message" id="message" class="form-control" placeholder="{{__('pages.Message')}}*" rows="5"></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-secondary" type="submit">
                                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                {{__('pages.SEND')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
