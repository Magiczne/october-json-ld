# october-json-ld
October CMS JSON-LD components for [schema.org](https://schema.org) with nesting support.

## Information
This plugin adds component for many of the https://schema.org schemas.

**[List of currently supported schemas and enumerations](SUPPORTED-SCHEMAS.md)**

## Usage
### Basic usage example

1. Add component to your layout or page and configure it
<img src="https://github.com/Magiczne/october-json-ld/blob/master/docs/thing_conf_1.png?raw" alt="Component configuration" width="500">

2. Render it using the component syntax
```twig
{% component 'Thing' %}
```
3. Component should render this code:
```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Thing",
        "description": "Example description",
        "name": "Example name"
    }
</script>
```

### Advanced usage
> **IMPORTANT 1**: Currently there are no checks performed to ensure that circular dependencies are not happening.
Have that in mind when referencing one component in another.

> **IMPORTANT 2**: Currently there is no support for referencing multiple components in one field, but it is planned
to do.

> **IMPORTANT 3**: When you reference component which does not exist in the page or layout exception will be thrown.

> **IMPORTANT 4**: When you reference component which is not a valid JSON-LD component exception will be thrown.

This plugin supports referencing components inside other components if there are added to the same page or
to the currently used layout.

To do to you need to use following syntax:
1. To reference component added to the same page use ```page:componentAlias```
2. To reference component added to the currently used layout use ```layout:componentAlias```

#### Example:
1. Insert **Thing** and **ImageObject** component to the page and configure them

| ImageObject   | Thing         |
| ------------- | ------------- |
| ![Thing component configuration](https://github.com/Magiczne/october-json-ld/blob/master/docs/image_conf.png?raw) | ![ImageObject component configuration](https://github.com/Magiczne/october-json-ld/blob/master/docs/thing_conf_2.png?raw) |

2. Insert code into your template:
```twig
{% component 'Thing' %}
```

3. Component should render this code:
```html
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Thing",
        "description": "Example description",
        "image": {
            "type": "ImageObject",
            "caption": "Image caption"
        },
        "name": "Example name"
    }
</script>
```
