<?php

class AWPCP_DeleteListingAction extends AWPCP_ListingActionWithConfirmation {

    public function get_name() {
        return __( 'Delete Listing', 'another-wordpress-classifieds-plugin' );
    }

    public function get_slug() {
        return 'delete-ad';
    }

    public function get_description() {
        return __( 'You can use this button to delete your listing.', 'another-wordpress-classifieds-plugin' );
    }

    public function get_confirmation_message() {
        return _x( 'Are you sure?', 'delete ad form in frontend edit ad screen', 'another-wordpress-classifieds-plugin' );
    }
}
