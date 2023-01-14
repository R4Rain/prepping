<div class="modal fade" id="delete{{ $model->id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4">
            <div class="modal-body text-center p-5">
                <h4 class="mb-4">Delete Confirmation</h4>

                <form method="POST" action="{{ route($name . '.destroy', $model) }}">
                    @csrf

                    <p class="mb-4">Are you sure want to delete?</p>

                    <button type="button" class="btn btn-outline-light rounded-3 px-4 me-2" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <input type="hidden" name="_method" value='DELETE'>
                    <button type="submit" class="btn btn-primary rounded-3 px-4">Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>
