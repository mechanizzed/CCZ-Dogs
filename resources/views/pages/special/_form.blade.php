<div class="row">
    <div class="form-group col-lg-4">
        {!! Form::label('category', 'Category') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control special_category']) !!}
    </div>
    <div class="form-group col-lg-8">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Page title', 'required']) !!}
    </div>
</div>

<div class="form-group show_paypal" style="display: inline">
    {!! Form::label('link', 'Link for PayPal') !!}
    {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'PayPal link']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Description') !!}
    {!! Form::text('body', null, ['class' => 'editor']) !!}
</div>

<hr>
<h5><i class="fa fa-google-plus-official" aria-hidden="true"></i> SEO settings</h5>
<div class="jumbotron p-3">
    <div class="row">
        <div class="col-lg-6 form-group">
            {!! Form::label('seo_title', 'SEO title for this page') !!}
            {!! Form::text('seo_title', null, ['class' => 'form-control', 'placeholder' => 'SEO title']) !!}
        </div>
        <div class="col-lg-6 form-group">
            {!! Form::label('seo_title', 'SEO keywords') !!}
            {!! Form::text('seo_keywords', null, ['class' => 'form-control', 'placeholder' => 'SEO keywords']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('seo_description', 'Description for this page') !!}
        {!! Form::textarea('seo_description', null, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>

</div>