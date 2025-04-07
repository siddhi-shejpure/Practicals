import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from sklearn.preprocessing import PolynomialFeatures
from sklearn.linear_model import LinearRegression

# Load dataset
data = pd.read_csv(r"C:\Users\siddh\Downloads\Position_Salaries.csv")
X = data.iloc[:, 1:2].values  # Assume Level is the independent variable
y = data.iloc[:, 2].values    # Assume Salary is the dependent variable

# Apply Polynomial Regression
poly = PolynomialFeatures(degree=4)  # Change degree as needed
X_poly = poly.fit_transform(X)
model = LinearRegression()
model.fit(X_poly, y)

# Predictions
y_pred = model.predict(X_poly)

# Plot results
plt.scatter(X, y, color='red', label="Actual")
plt.plot(X, y_pred, color='blue', label="Polynomial Regression")
plt.xlabel("Position Level")
plt.ylabel("Salary")
plt.legend()
plt.show()
