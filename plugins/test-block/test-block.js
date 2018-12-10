( function() {
    var __ = wp.i18n.__;
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var RichText = wp.editor.RichText;

const {PanelBody, PanelRow} = wp.components;
const {Fragment} = wp.element;
const {InspectorControls,} = wp.editor;

    registerBlockType( 'test-block/test-block', {
        title: __( 'Carrot' ),
        description: __('Naughty carrot, behave'),
		icon: 'carrot',
        category: 'layout',
        keywords: [ __( 'grid' ), __( 'box' ), __( 'carrot' ) ],

        attributes: {
            text: {
                source: 'children',
                selector: 'p',
                default:''
            }

		},

		// The "edit" property must be a valid function.
		edit: function( props ) {
			return el(
				RichText,
				{
                    className: props.className,
                    onChange: function(value) {
                        props.setAttributes({ text: value});
                    },
                    value: props.attributes.text,
                },
            )


            // Other shit

            /*return (
                /*<Fragment>
                    <InspectorControls>
                        <PanelBody title={ __('Carrot Settings') }>
                            <PanelRow>
                                <label>Set Carrot</label>
                            </PanelRow>
                            <PanelRow>
                                <label>Set Filter</label>
                                <form>
                                    <select id="image-filter">
                                        <option value="">None</option>
                                        <option value="sepia">Sepia</option>
                                        <option value="grayscale">Grayscale</option>
                                    </select>
                                </form>
                            </PanelRow>
                        </PanelBody>
                    </InspectorControls>
			    </Fragment>
            ) */
		},

		// The "save" property must be specified and must be a valid function.
		save: function( props ) {
			return el(
				'p',
				{ className: props.className },
				props.attributes.text
			);
		},
	} );
})();
