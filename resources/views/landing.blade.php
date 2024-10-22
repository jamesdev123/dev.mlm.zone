@extends('layouts.landing')


@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_START')
@endsection


@section('PAGE_CONTENT')

	<!-- OPEN - LEFT PART -->
	<div class="ms-left">

		<!-- +++ START - Home Left +++ -->
		@include('_sections.landing.left_part.homeLeft')
		<!-- +++ END - Home Left +++ -->

		<!-- +++ START - Challenge Left +++ -->
		@include('_sections.landing.left_part.challengeLeft')
		<!-- +++ END - Challenge Left +++ -->

		<!-- +++ START - Solution Left +++ -->
		@include('_sections.landing.left_part.solutionLeft')
		<!-- +++ END - Solution Left +++ -->

		<!-- +++ START - Membership Left +++ -->
		@include('_sections.landing.left_part.membershipLeft')
		<!-- +++ END - Membership Left +++ -->

		<!-- +++ START - Tell-A-Friend Left +++ -->
		@include('_sections.landing.left_part.tellFriendLeft')
		<!-- +++ END - Tell-A-Friend Left +++ -->

		<!-- +++ START - Roadmap Left +++ -->
		@include('_sections.landing.left_part.roadmapLeft')
		<!-- +++ END - Roadmap Left +++ -->

		<!-- +++ START - Summary Left +++ -->
		@include('_sections.landing.left_part.summaryLeft')
		<!-- +++ END - Summary Left +++ -->

		<!-- +++ START - Notify-Me Left +++ -->
		@include('_sections.landing.left_part.notifyMeLeft')
		<!-- +++ END - Notify-Me Left +++ -->

	</div>
	<!-- CLOSE - LEFT PART -->

	<!-- OPEN - RIGHT PART -->
	<div class="ms-right" id="right-part">

		<!-- +++ START - Home Right +++ -->
		@include('_sections.landing.right_part.homeRight')
		<!-- +++ END - Home Right +++ -->

		<!-- +++ START - Challenge Right +++ -->
		@include('_sections.landing.right_part.challengeRight')
		<!-- +++ END - Challenge Right +++ -->

		<!-- +++ START - Solution Right +++ -->
		@include('_sections.landing.right_part.solutionRight')
		<!-- +++ END - Solution Right +++ -->

		<!-- +++ START - Membership Right +++ -->
		@include('_sections.landing.right_part.membershipRight')
		<!-- +++ END - Membership Right +++ -->

		<!-- +++ START - Tell-A-Friend Right +++ -->
		@include('_sections.landing.right_part.tellFriendRight')
		<!-- +++ END - Tell-A-Friend Right +++ -->

		<!-- +++ START - Roadmap Right +++ -->
		@include('_sections.landing.right_part.roadmapRight')
		<!-- +++ END - Roadmap Right +++ -->

		<!-- +++ START - Summary Right +++ -->
		@include('_sections.landing.right_part.summaryRight')
		<!-- +++ END - Summary Right +++ -->

		<!-- +++ START - Notify-Me Right +++ -->
		@include('_sections.landing.right_part.notifyMeRight')
		<!-- +++ END - Notify-Me Right +++ -->

	</div>
	<!-- CLOSE - RIGHT PART -->

@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
@endsection
