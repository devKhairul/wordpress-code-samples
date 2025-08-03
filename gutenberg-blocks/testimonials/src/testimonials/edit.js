import { useBlockProps, MediaUpload, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { heading, comment, author, imageUrl, imageAlt } = attributes;

	const blockProps = useBlockProps();


	const onSelectImage = (media) => {
		setAttributes({
			imageUrl: media.url,
			imageAlt: media.alt,
		});
	};

	return (
		<div className="testimonial-block" {...blockProps}>
			<RichText
				tagName="h2"
				placeholder="Add heading"
				value={heading}
				onChange={(value) => setAttributes({ heading: value })}
			/>
			<RichText
				tagName="p"
				className="comment"
				placeholder="Add comment"
				value={comment}
				onChange={(value) => setAttributes({ comment: value })}
			/>
			<RichText
				tagName="p"
				className="author"
				placeholder="Author name"
				value={author}
				onChange={(value) => setAttributes({ author: value })}
			/>

			<MediaUpload
				onSelect={onSelectImage}
				allowedTypes={['image']}
				value={imageUrl}
				render={({ open }) => (
					<div className="image-upload">
						{imageUrl ? (
							<div>
								<img src={imageUrl} alt={imageAlt} style={{ maxWidth: '150px', borderRadius: '50%' }} />
								<Button onClick={open} variant="secondary" style={{ marginTop: '0.5rem' }}>
									Change Image
								</Button>
							</div>
						) : (
							<Button onClick={open} variant="secondary">
								Upload Author Photo
							</Button>
						)}
					</div>
				)}
			/>
		</div>
	);
}
