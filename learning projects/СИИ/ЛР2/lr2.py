import seaborn as sns
from sklearn.covariance import EllipticEnvelope
from sklearn.datasets import make_blobs
from matplotlib import pyplot as plt
from pandas import DataFrame
from numpy import quantile, where


X,Y = make_blobs(n_samples=200, centers=1, n_features=2)

df=DataFrame(dict(x=X[:,0],y=X[:,1],label=Y))


elenv = EllipticEnvelope(contamination=.03)


pred = elenv.fit_predict(X)
anom_index=where(pred==-1)
values = X[anom_index]






sns.set_theme(style="darkgrid")

 ##графы
plt.scatter(X[:,0], X[:,1])
plt.scatter(values[:,0],values[:,1], color='r')
plt.show()

sns.boxplot(x=df['x'],width=0.2,color=".67");
sns.swarmplot(x=df['x'],color=".25");
plt.show()

sns.boxplot(y=df['y'],width=0.2,color=".67");
sns.swarmplot(y=df['y'],color=".25");
plt.show()





