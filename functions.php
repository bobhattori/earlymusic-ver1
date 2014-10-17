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
                    'title' => 'track num1',
                    'type' => 'text',
                ),
                'songNum2' => array(
                    'title' => 'track num2',
                    'type' => 'text',
                ),
                'songNum3' => array(
                    'title' => 'track num3',
                    'type' => 'text',
                ),
                'caps' => array(
                    'title' => 'caption',
                    'type' => 'text',
                ),
            )
        )
    );
}
add_action( 'p2p_init', 'my_connection_types' );

?>