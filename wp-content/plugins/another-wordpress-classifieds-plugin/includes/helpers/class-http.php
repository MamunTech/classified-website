<?php

function awpcp_http() {
    return new AWPCP_HTTP();
}

class AWPCP_HTTP {

    public function get( $url, $args = array() ) {
        $args = array_merge( array(
            'headers' => array(
                'user-agent' => awpcp_user_agent_header(),
            ),
        ) );

        return $this->response( wp_remote_get( $url, $args ) );
    }

    private function response( $response ) {
        if ( is_wp_error( $response ) ) {
            throw new AWPCP_WPError( $response );
        } else {
            return $response;
        }
    }
}
