import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn.tree import DecisionTreeRegressor
from sklearn.svm import SVR
from sklearn.preprocessing import StandardScaler

# Load dataset
data = pd.read_csv(r"C:\Users\siddh\Downloads\Position_Salaries.csv")
X = data.iloc[:, 1:2].values  # Assume Level is the independent variable
y = data.iloc[:, 2].values    # Assume Salary is the dependent variable

# Decision Tree Regression
dt_model = DecisionTreeRegressor(random_state=42)
dt_model.fit(X, y)
y_pred_dt = dt_model.predict(X)

# Support Vector Regression (SVR)
sc_X, sc_y = StandardScaler(), StandardScaler()
X_scaled, y_scaled = sc_X.fit_transform(X), sc_y.fit_transform(y.reshape(-1, 1)).ravel()
svr_model = SVR(kernel='rbf')
svr_model.fit(X_scaled, y_scaled)
y_pred_svr = sc_y.inverse_transform(svr_model.predict(X_scaled).reshape(-1, 1))

# Plot results
plt.figure(figsize=(10, 4))

# Decision Tree Plot
plt.subplot(1, 2, 1)
plt.scatter(X, y, color='red', label="Actual")
plt.plot(X, y_pred_dt, color='blue', label="Decision Tree")
plt.xlabel("Position Level"), plt.ylabel("Salary"), plt.legend()

# SVR Plot
plt.subplot(1, 2, 2)
plt.scatter(X, y, color='red', label="Actual")
plt.plot(X, y_pred_svr, color='green', label="SVR")
plt.xlabel("Position Level"), plt.ylabel("Salary"), plt.legend()

plt.tight_layout()
plt.show()
