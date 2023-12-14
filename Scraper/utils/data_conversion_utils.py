import csv
import os


def convert_products_to_csv(products, output_directory, output_file="output.csv"):
    try:
        field_names = ['id', 'name', 'image_urls', 'price', 'description', 'subcategory']

        os.makedirs(output_directory, exist_ok=True)

        with open(os.path.join(output_directory, output_file), mode='w', newline='', encoding='utf-8') as csvfile:
            csv_writer = csv.DictWriter(csvfile, fieldnames=field_names)
            csv_writer.writeheader()

            # Iterate through each product and write its data to the CSV file
            for product in products:
                main_image_url = product.get('main_image_url', '')
                secondary_image_url = product.get('secondary_image_url', '')
                product['image_urls'] = f"{main_image_url};{secondary_image_url}"

                filtered_product = {key: product[key] for key in field_names}
                csv_writer.writerow(filtered_product)
    except Exception as e:
        print(f"Error converting product to CSV: {e}")
