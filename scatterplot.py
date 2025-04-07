import pandas as pd
import matplotlib.pyplot as plt

# Load the Iris dataset (ensure the file path is correct)
data = pd.read_csv(r"C:\Users\siddh\Downloads\Iris.csv")

# Check the first few rows of the dataset to understand its structure
print(data.head())

# Create a scatter plot using two features, for example, 'SepalLengthCm' and 'SepalWidthCm'
plt.figure(figsize=(8, 6))
plt.scatter(data['SepalLengthCm'], data['SepalWidthCm'], c=data['Species'].astype('category').cat.codes, cmap='viridis')

# Label the axes
plt.xlabel('Sepal Length (cm)')
plt.ylabel('Sepal Width (cm)')

# Title for the plot
plt.title('Scatter Plot of Sepal Length vs Sepal Width')

# Show the plot
plt.colorbar(label='Species')
plt.show()
