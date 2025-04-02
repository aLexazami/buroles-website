// This script dynamically updates the service options based on the selected customer type
export function updateServiceOptions() {
  const customerType = document.getElementById('customer-type').value;
  const serviceAvailed = document.getElementById('service-availed');
  serviceAvailed.innerHTML = '<option value="" disabled selected>Service Availed</option>'; // Reset options

  let options = [];
  if (customerType === 'business') {
    options = ['Business Registration', 'Tax Filing', 'Permit Application'];
  } else if (customerType === 'citizen') {
    options = ['Birth Certificate', 'Marriage Certificate', 'Community Services'];
  } else if (customerType === 'government') {
    options = ['Inter-Agency Coordination', 'Government Training', 'Policy Consultation'];
  }

  options.forEach(option => {
    const opt = document.createElement('option');
    opt.value = option.toLowerCase().replace(/ /g, '-');
    opt.textContent = option;
    serviceAvailed.appendChild(opt);
  });
}