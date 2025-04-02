import { updateServiceOptions } from './scripts/services-option.js';

// Initialize the service options based on the selected customer type
document.addEventListener('DOMContentLoaded', () => {
  const customerType = document.getElementById('customer-type');
  customerType.addEventListener('change', updateServiceOptions);
});


