using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ЧМ1
{
    class Calculate
    {
        static Form1 f1 = new Form1();
        public delegate double Function(double x, double y);

        #region Ordinary Differential Equations - Methods

        public static double ODE_Euler(Function f, double x0, double y0, double h, double x)
        {
            double xnew, ynew, result = double.NaN;
            if (x <= x0)
                result = y0;
            else if (x > x0)
            {
                do
                {
                    if (h > x - x0) h = x - x0;
                    ynew = y0 + f(x0, y0) * h;
                    xnew = x0 + h;
                    x0 = xnew;
                    y0 = ynew;
                } while (x0 < x);
                result = ynew;
            }
            return result;
        }


        public static double ODE_RungeKutta4(Function f, double x0, double y0, double h, double x)
        {
            double xnew, ynew, k1, k2, k3, k4, result = double.NaN;
            if (x == x0)
                result = y0;
            else if (x > x0)
            {
                do
                {
                    if (h > x - x0) h = x - x0;
                    k1 = h * f(x0, y0);
                    k2 = h * f(x0 + 0.5 * h, y0 + 0.5 * k1);
                    k3 = h * f(x0 + 0.5 * h, y0 + 0.5 * k2);
                    k4 = h * f(x0 + h, y0 + k3);
                    ynew = y0 + (k1 + 2 * k2 + 2 * k3 + k4) / 6;
                    xnew = x0 + h;
                    x0 = xnew;
                    y0 = ynew;
                } while (x0 < x);
                result = ynew;
            }
            return result;
        }



        #endregion

        #region Ordinary Differential Equations - Test functions

        static double f(double x, double y)
        {
            return y * Math.Cos(x);
        }


        public static double[] TestEuler(double h, double x0, double y0)
        {
            double x = 0, result, exact = 0;
            double[] n = new double[3];
            
            result = y0;
            for (int i = 0; i < 11; i++)
            {
                x = 0.1 * i;
                result = ODE_Euler(f, x0, result, h, x);
                exact = Math.Exp(Math.Sin(x));
                
                    
                x0 = x;
            }
            n[0] = x;
            n[1] = result;
            n[2] = exact;
            return n;
        }


        public static double[] TestRungeKutta4(double h, double x0, double y0)
        {
            double x=0, result, exact=0;
            double[] n=new double[3];
            
            result = y0;
            for (int i = 0; i < 11; i++)
            {
                x = 0.1 * i;
                result = ODE_RungeKutta4(f, x0, result, h, x);
                exact = Math.Exp(Math.Sin(x));
                
                
                x0 = x;
            }
            n[0] = x;
            n[1] = result;
            n[2] = exact;

            return n;
        }




        #endregion
    }

}
