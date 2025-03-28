<div class="modal fade modal-style" id="addTrainingModal" tabindex="-1" aria-labelledby="addTrainingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTrainingModalLabel">Neues Training hinzufügen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/addTraining.php" method="post"> <!-- Redirects to new handler -->
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="location" class="form-label">Ort</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="mb-3">
                        <label for="datetime" class="form-label">Datum/Zeit</label>
                        <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                    <button type="submit" class="btn btn-primary bg-dark-green">Speichern</button>
                </div>
            </form>
        </div>
    </div>
</div>