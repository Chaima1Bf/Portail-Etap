@extends('layouts.app')
@section('title')
    Table Pivot
@endsection

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Table Pivot</h1>
      </div>
    <div id="pivotContainer">The component will appear here</div>
    <script src="{{ asset('/flexmonster/flexmonster.js') }}"></script>
    
    <script>
        let pivot = new Flexmonster({
            container: "pivotContainer",
            componentFolder: "/flexmonster/",
            toolbar: true,
            licenseKey: "Z705-X94A0I-272L1U-1X2G19"
        });
    </script>


@endsection    