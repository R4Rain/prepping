<div class="modal fade" id="lesson{{ $lesson->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body p-5">
                <h4 class="mb-4 text-center">{{ $lesson->title }}</h4>

                <hr style="border-style: dashed">

                <div>{!! $lesson->content !!}</div>
            </div>
        </div>
    </div>
</div>
