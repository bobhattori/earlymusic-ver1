/** posts 2 posts **/
function my_connection_types() {
    // Posts 2 Posts プラグインが有効化されてるかチェック
    if ( !function_exists( 'p2p_register_connection_type' ) )
        return;
 
    // 登録する
    p2p_register_connection_type(
        array(
            'name' => 'cds_to_songtitle',
            'from' => 'songtitle',
            'to' => 'cds'
        )
    );
}
add_action( 'wp_loaded', 'my_connection_types' );