
// Creta Testimonial Showcase plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const outdoor_camping_button = document.getElementById('install-activate-button');

    if (!outdoor_camping_button) return;

    outdoor_camping_button.addEventListener('click', function (e) {
        e.preventDefault();

        const outdoor_camping_redirectUrl = outdoor_camping_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const outdoor_camping_checkData = new FormData();
        outdoor_camping_checkData.append('action', 'check_creta_testimonial_activation');

        fetch(installcretatestimonialData.ajaxurl, {
            method: 'POST',
            body: outdoor_camping_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = outdoor_camping_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                outdoor_camping_button.textContent = 'Nevigate Getstart';

                const outdoor_camping_installData = new FormData();
                outdoor_camping_installData.append('action', 'install_and_activate_creta_testimonial_plugin');
                outdoor_camping_installData.append('_ajax_nonce', installcretatestimonialData.nonce);

                fetch(installcretatestimonialData.ajaxurl, {
                    method: 'POST',
                    body: outdoor_camping_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = outdoor_camping_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        outdoor_camping_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    outdoor_camping_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
