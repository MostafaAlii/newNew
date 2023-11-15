<div class="modal fade" id="create_orderService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white">
                <h5 class="modal-title white" id="exampleModalLabel">Create New {{ ucfirst($title) }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('button.store') }}" method="POST">
                    @csrf
                    <!-- Start Name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required name="name" id="name"
                            value="">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Name -->

                    <!-- End Notes -->
                    <!-- Start Status Status -->
                    <div class="p-1 form-group">
                        <label for="type">type</label>
                        <select name="type" class="form-control">
                            <option selected disabled>Select {{ $title }} type...</option>
                            <option value="header" {{ old('type') == 'header' ? 'selected' : '' }}>Header</option>
                            <option value="service" {{ old('type') == 'service' ? 'selected' : '' }}>Service</option>
                            <option value="payment" {{ old('type') == 'payment' ? 'selected' : '' }}>Payment</option>
                        </select>
                        @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Status Selected -->
                    <hr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
