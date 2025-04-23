# Custom Block Patterns

## Overview
Your Block Theme includes several custom block patterns to simplify creating consistent and modern layouts. These patterns are available in the WordPress Block Editor under the "Your Theme Patterns" category.

## Available Patterns
- **Default Header:** Includes the site logo, site title, tagline, and navigation.
- **Default Footer:** Contains site information and social media links.
- **Archive Layout:** Dynamically displays a list of posts using a query loop.
- **Single Post Layout:** Optimized for individual post display with built-in support for comments.

## Creating & Extending Block Patterns
- **Editing Existing Patterns:**  
  Locate the pattern registration in `functions.php` (using `register_block_pattern()`). Modify the markup and block settings as needed.

- **Adding New Patterns:**  
  Register new patterns by adding calls to `register_block_pattern()` with a unique identifier, title, description, and content.  
  **Example:**
  ```php
  register_block_pattern(
    'your-block-theme/custom-pattern',
    array(
      'title'       => __( 'Custom Pattern', 'your-block-theme' ),
      'description' => __( 'A custom block pattern for special layouts.', 'your-block-theme' ),
      'categories'  => array( 'your-theme-patterns' ),
      'content'     => '<!-- wp:paragraph {"placeholder":"Add your text"} /-->',
    )
  );
