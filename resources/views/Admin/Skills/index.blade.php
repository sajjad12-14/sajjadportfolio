@extends('Layouts.Adminlayouts')

@section('page-heading', 'Skills')


@section('content')

    <div class="skills-admin-page">
        <div class="skills-admin-header">

            <div class="skills-admin-header-content">

                <h5>
                    <i class="bi bi-lightning-charge-fill me-2"></i>
                    Skills Section
                </h5>

                <p>
                    Manage the skills and technologies displayed on your portfolio.
                </p>

            </div>


            <a href="{{ route('admin.skills.create') }}" class="skills-admin-btn">

                <i class="bi bi-plus-lg"></i>

                Add Skill

            </a>

        </div>

        @if (session('success'))
            <div class="alert alert-success border-0 shadow-sm mb-4">
                <i class="bi bi-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        @endif


        <div class="skills-admin-card">

            @if ($skills->count() > 0)

                <table class="skills-table">

                    <thead>
                        <tr>
                            <th>Skill</th>
                            <th>Description</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($skills as $skill)
                            <tr>

                                <td>

                                    <div class="skill-name-box">

                                        <div class="skill-icon-box">

                                            @if ($skill->icon)
                                                <i class="{{ $skill->icon }}"></i>
                                            @else
                                                <i class="bi bi-code-slash"></i>
                                            @endif

                                        </div>

                                        <div class="skill-name">
                                            {{ $skill->name }}
                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <div class="skill-description">
                                        {{ $skill->description }}
                                    </div>

                                </td>


                                <td>

                                    <div class="skill-progress-wrapper">

                                        <div class="d-flex justify-content-between mb-2">

                                            <span class="skill-percentage">
                                                {{ $skill->percentage }}%
                                            </span>

                                        </div>

                                        <div class="skill-progress">

                                            <span style="width: {{ $skill->percentage }}%;"></span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    @if ($skill->status)
                                        <span class="skill-status active">
                                            Active
                                        </span>
                                    @else
                                        <span class="skill-status inactive">
                                            Inactive
                                        </span>
                                    @endif

                                </td>


                                <td>

                                    <div class="skill-actions">

                                        <a href="{{ route('admin.skills.edit', $skill->id) }}" class="skill-action-btn"
                                            title="Edit">

                                            <i class="bi bi-pencil"></i>

                                        </a>


                                        <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST"
                                            class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="skill-action-btn skill-delete-btn" title="Delete">

                                                <i class="bi bi-trash3"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>
            @else
                <div class="skills-empty">

                    <div class="skills-empty-icon">
                        <i class="bi bi-stars"></i>
                    </div>

                    <h3>No Skills Added Yet</h3>

                    <p>
                        Start by adding your first portfolio skill.
                    </p>

                    <a href="{{ route('admin.skills.create') }}" class="add-skill-btn">

                        <i class="bi bi-plus-lg"></i>
                        Add Your First Skill

                    </a>

                </div>

            @endif

        </div>

    </div>

@endsection
