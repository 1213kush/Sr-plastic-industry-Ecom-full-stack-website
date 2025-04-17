<div class="modal fade" id="bookingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Book Your Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="bookingForm" action="submit_service.php" method="post">
          <input type="hidden" name="product_id" id="modal_product_id" value="">
          
          <div class="mb-3">
            <label for="customer_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
          </div>
          
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          
          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>
          
          <div class="mb-3">
            <label for="service_type" class="form-label">Service Type</label>
            <select class="form-select" id="service_type" name="service_type" required>
              <option value="">Select a service</option>
              <option value="installation">Installation</option>
              <option value="repair">Repair</option>
              <option value="maintenance">Maintenance</option>
              <option value="consultation">Consultation</option>
            </select>
          </div>
          
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="preferred_date" class="form-label">Preferred Date</label>
              <input type="date" class="form-control" id="preferred_date" name="preferred_date" required>
            </div>
            <div class="col-md-6">
              <label for="preferred_time" class="form-label">Preferred Time</label>
              <input type="time" class="form-control" id="preferred_time" name="preferred_time" required>
            </div>
          </div>
          
          <div class="mb-3">
            <label for="message" class="form-label">Additional Notes</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit Booking</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
// Function to open modal with product ID
function openBookingModal(productId) {
  document.getElementById('modal_product_id').value = productId;
  var modal = new bootstrap.Modal(document.getElementById('bookingModal'));
  modal.show();
}

// Handle form submission
document.getElementById('bookingForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var formData = new FormData(this);
  
  fetch('submit_service.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    document.getElementById('bookingModal').querySelector('.modal-body').innerHTML = data;
  })
  .catch(error => console.error('Error:', error));
});
</script>
