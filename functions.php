<?php
/** posts 2 posts **/

function my_connection_types() {
    p2p_register_connection_type(
        array(
            'name' => 'cds_to_songtitle',
            'from' => 'songtitle',
            'to' => 'cds',
            'sortable' => 'any',
            'fields' => array(
                'songNum' => array(
                    'title' => 'song number',
                    'type' => 'text',
                ),
            )
        )
    );
}
add_action( 'p2p_init', 'my_connection_types' );
?>