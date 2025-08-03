import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const { heading, comment, author, imageUrl, imageAlt } = attributes;
	const blockProps = useBlockProps.save();

	return (
		<div {...blockProps}>
			<RichText.Content tagName="h2" value={heading} />
			<RichText.Content tagName="p" className="comment" value={comment} />
			<RichText.Content tagName="p" className="author" value={author} />
			{imageUrl && <img src={imageUrl} alt={imageAlt} />}
		</div>
	);
}
