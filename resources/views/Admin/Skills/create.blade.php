@extends('Layouts.Adminlayouts')

@section('page-heading', 'Add Skill')

@section('content')

    <div class="skills-create-page">

        {{-- Page Header --}}
        <div class="skills-create-header">

            <div class="skills-create-header-content">

                <h5>
                    <i class="bi bi-lightning-charge-fill me-2"></i>
                    Add New Skill
                </h5>

                <p>
                    Add a new skill or technology to your portfolio.
                </p>

            </div>

        </div>


        {{-- Form Card --}}
        <div class="skills-create-card">

            <form action="{{ route('admin.skills.store') }}"
                  method="POST">

                @csrf


                {{-- Skill Name --}}
                <div class="skills-form-group">

                    <label for="name" class="skills-form-label">
                        Skill Name
                        <span>*</span>
                    </label>

                    <input type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           class="skills-form-control @error('name') is-invalid @enderror"
                           placeholder="e.g. PHP, Laravel, MySQL"
                           required>

                    @error('name')
                        <div class="skills-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Icon --}}
                <div class="skills-form-group">

                    <label for="icon" class="skills-form-label">
                        Bootstrap Icon
                    </label>

                    <input type="text"
                           id="icon"
                           name="icon"
                           value="{{ old('icon') }}"
                           class="skills-form-control @error('icon') is-invalid @enderror"
                           placeholder="e.g. bi bi-filetype-php">

                    <div class="skills-form-help">
                        Enter a Bootstrap Icons class such as
                        <strong>bi bi-filetype-php</strong>.
                    </div>

                    @error('icon')
                        <div class="skills-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Percentage --}}
                <div class="skills-form-group">

                    <label for="percentage" class="skills-form-label">
                        Skill Level
                        <span>*</span>
                    </label>

                    <div class="skills-percentage-input">

                        <input type="number"
                               id="percentage"
                               name="percentage"
                               value="{{ old('percentage', 80) }}"
                               min="0"
                               max="100"
                               class="skills-form-control @error('percentage') is-invalid @enderror"
                               placeholder="80"
                               required>

                        <span>%</span>

                    </div>

                    <div class="skills-form-help">
                        Enter a value between 0 and 100.
                    </div>

                    @error('percentage')
                        <div class="skills-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Description --}}
                <div class="skills-form-group">

                    <label for="description" class="skills-form-label">
                        Description
                        <span>*</span>
                    </label>

                    <textarea id="description"
                              name="description"
                              rows="5"
                              class="skills-form-control skills-textarea @error('description') is-invalid @enderror"
                              placeholder="Write a short description about this skill..."
                              required>{{ old('description') }}</textarea>

                    @error('description')
                        <div class="skills-error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- Status --}}
                <div class="skills-status-box">

                    <div class="skills-status-content">

                        <div>
                            <div class="skills-status-title">
                                Skill Status
                            </div>

                            <div class="skills-status-description">
                                Enable this skill to display it on your portfolio.
                            </div>
                        </div>

                        <div class="form-check form-switch skills-switch">

                            <input class="form-check-input"
                                   type="checkbox"
                                   name="status"
                                   value="1"
                                   id="status"
                                   {{ old('status', 1) ? 'checked' : '' }}>

                            <label class="form-check-label"
                                   for="status">
                                Active
                            </label>

                        </div>

                    </div>

                </div>


                {{-- Actions --}}
                <div class="skills-form-actions">

                    <a href="{{ route('admin.skills.index') }}"
                       class="skills-cancel-btn">

                        <i class="bi bi-arrow-left"></i>

                        Cancel

                    </a>


                    <button type="submit"
                            class="skills-save-btn">

                        <i class="bi bi-check2-circle"></i>

                        Save Skill

                    </button>

                </div>

            </form>

        </div>

    </div>

@endsection
