@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">General Settings</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin.setting-update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="site_title" class="form-label">Site Title</label>
                                        <input name="site_title" class="form-control" type="text"
                                            value="{{ $settings?->site_title }}" id="site_title">
                                    </div>
                                    <div class="mb-3">

                                        <label for="site_logo" class="form-label">Site Logo</label>
                                        <input name="site_logo" type="file" class="form-control" type="search"
                                            value="" id="site_logo">
                                    </div>


                                    <div class="mb-3">
                                        <label for="site_email" class="form-label">Site Email</label>
                                        <input name="site_email" class="form-control" type="email"
                                            value="{{ $settings?->site_email }}" id="site_email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_address" class="form-label">Site Address</label>
                                        <input name="site_address" class="form-control" type="text"
                                            value="{{ $settings?->site_address }}" id="site_address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="adoption_form_url" class="form-label">Adoption Form URL</label>
                                        <input name="adoption_form_url" class="form-control" type="url"
                                            value="{{ $settings?->adoption_form_url }}" id="adoption_form_url">
                                    </div>
                                    <div class="mb-3">
                                        <label for="default_pet_image" class="form-label">Default Pet Image</label>
                                        <input name="default_pet_image" class="form-control" type="file" value=""
                                            id="default_pet_image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="facebook_url" class="form-label">Facebook URL</label>
                                        <input name="facebook_url" class="form-control" type="url"
                                            value="{{ $settings?->facebook_url }}" id="facebook_url">
                                    </div>
                                    <div class="mb-3">
                                        <label for="linkedin_url" class="form-label">Linkdin URL</label>
                                        <input name="linkedin_url" class="form-control" type="url"
                                            value="{{ $settings?->linkedin_url }}" id="linkedin_url">
                                    </div>
                                    <div class="mb-3">
                                        <label for="default_currency" class="form-label">Default Currency</label>
                                        <input name="default_currency" class="form-control" list="currencylistOptions"
                                            id="default_currency" placeholder="Type to search...">
                                        <datalist id="currencylistOptions">
                                            <option value="BDT">
                                            </option>
                                            <option value="USD">
                                            </option>
                                            <option value="EUR">
                                            </option>
                                            <option value="AUD">
                                            </option>
                                        </datalist>
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_description" class="form-label">Site Description</label>
                                        <textarea name="site_description" class="form-control" type="text" value="" id="site_description">{{ $settings?->site_description }}</textarea>
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mt-3 mt-lg-0">
                                    <div class="mb-3">
                                        <label for="site_url" class="form-label">Site Url</label>
                                        <input name="site_url" class="form-control" type="url"
                                            value="{{ $settings?->site_url }}" id="site_url">
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_favicon" class="form-label">Site Favicon</label>
                                        <input name="site_favicon" class="form-control" type="file" value=""
                                            id="site_favicon">
                                    </div>

                                    <div class="mb-3">
                                        <label for="site_author" class="form-label">Author</label>
                                        <input name="site_author" class="form-control" type="text"
                                            value="{{ $settings?->site_author }}" id="site_author">
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_phone" class="form-label">Phone</label>
                                        <input name="site_phone" class="form-control" type="text"
                                            value="{{ $settings?->site_phone }}" id="site_phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_fax" class="form-label">Site Fax</label>
                                        <input name="site_fax" class="form-control" type="text"
                                            value="{{ $settings?->site_fax }}" id="site_fax">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_form_email" class="form-label">Contact Form Email</label>
                                        <input name="contact_form_email" type="email" class="form-control"
                                            id="contact_form_email" value="{{ $settings?->contact_form_email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="twitter_url" class="form-label">Twitter URL</label>
                                        <input name="twitter_url" type="url" class="form-control" id="twitter_url"
                                            value="{{ $settings?->twitter_url }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="instagram_url" class="form-label">Instagram URL</label>
                                        <input name="instagram_url" class="form-control" type="url"
                                            value="{{ $settings?->instagram_url }}" id="instagram_url">
                                    </div>
                                    <div class="mb-3">
                                        <label for="default_country" class="form-label">Default Country</label>
                                        <input name="default_country" class="form-control" type="text"
                                            value="{{ $settings?->default_country }}" id="default_country">
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_footer" class="form-label">Site Footer</label>
                                        <textarea name="site_footer" class="form-control" type="text" value="" id="site_footer">{{ $settings?->site_footer }}</textarea>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="submit-button mt-4 text-end">
                            <button type="submit" class="btn btn-primary">Submit form</button>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
