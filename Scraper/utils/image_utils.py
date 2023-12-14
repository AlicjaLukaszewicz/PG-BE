import os

import requests


def save_image(image_url, output_directory, product_id, image_type):
    """
    Save an image to the specified directory.

    :param image_url: The URL of the image to save
    :param output_directory: The directory to save the image to
    :param product_id: The unique ID of the product
    :param image_type: The type of image to save (main, second, etc.)

    :return: None
    """
    try:
        response = requests.get(image_url)
        response.raise_for_status()

        # Construct the file name
        file_name = f"{product_id}_{image_type}.jpg"

        # Create the directory with the product ID if it doesn't exist in the output directory
        os.makedirs(os.path.join(output_directory, product_id), exist_ok=True)

        # Save the image to the specified directory with the product ID as the filename
        with open(os.path.join(output_directory, product_id, file_name), "wb") as file:
            file.write(response.content)

        print(f"Image saved successfully: {file_name}")

    except requests.exceptions.RequestException as e:
        print(f"Error: Could not save image {image_url}. Exception: {e}")
