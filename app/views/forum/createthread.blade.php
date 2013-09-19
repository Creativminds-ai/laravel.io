
<div class="row">
    <div class="small-12 columns">
        <h2>Create Thread in {{ $category->title }}</h2>

        {{ Form::open() }}

        <fieldset>
            <legend>Ban</legend>

            <div class="row">
                <div class="small-1 columns">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title') }}
                </div>
            </div>

            <div class="row">
                <div class="small-1 columns">
                    {{ Form::label('body', 'Thread') }}
                    {{ Form::textarea('body') }}
                </div>
            </div>
        </fieldset>

        <div class="row">
            <div class="large-12 columns">
                {{ Form::button('Save', ['type' => 'submit']) }}
            </div>
        </div>

        {{ Form::close() }}

    </div>
</div>